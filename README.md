
# Purpose

WordPress site for Hello World (https://go.helloworlddevs.com).

# Environments/sites

* Production: https://go.helloworlddevs.com

# Project branch strategy
    main     :: Code currently deployed or about to be deployed to production.
    
# Hosting

This site is hosted on DreamHost (https://www.dreamhost.com/). 

In theory you can login using the Google authentication option with your @helloworlddevs.com email address.

If that doesn't work, Ben's password is shared in LastPass. Search for "DreamHost Admin".

# Local setup

## (Step 1) Install Lando and Docker Desktop

Follow the recommended instructions for installing Lando (if Lando is not already installed). Docker Desktop will be installed as well.

https://docs.lando.dev/basics/installation.html#macos

## (Step 2) Git clone the repo

`git clone` the Github repo into whichever directory you prefer.

`cd` into the repo/project.

### Check for Git submodules

There are a couple Git submodules necessary for the site to function. Depending on your version of Git, they may not be
cloned automatically. To check, run:

```
ls web/wp-content/plugins/boldgrid-backup/vendor/ifsnop/mysqldump-php
```

If you receive an error, the submodules have not been cloned. To clone them, run:

```
git submodule update --init --recursive
```

## (Step 3) Configure /etc/hosts

Edit `/etc/hosts` on your local machine. Add this line:

```
127.0.0.1				helloworld-wp.lando
```

Normally Lando will create site URLs in the format *.lndo.site. Because of the proxy settings we have in .lando.yml, those won’t be created. Instead we’ll have this nicer URL, but the trade off is we have to add it to our `/etc/hosts` file.


## (Step 4) Copy your SSH public key to DreamHost

```
ssh-copy-id -i ~/.ssh/id_rsa.pub helloworld_admin@windstone.dreamhost.com
```

When prompted for password, search LastPass for "Dreamhost SSH: helloworld_admin" and copy and paste password.

## (Step 5) Whitelist your IP to DreamHost MySQL

DreamHost uses IP whitelisting to allow remote access to the Prod MySQL. This is annoying, and it means
that when your IP changes you'll need to repeat this step.

* https://panel.dreamhost.com/index.cgi?tree=advanced.mysql&current_step=Index&next_step=ShowEditUser&usernamed=gohelloworlddevs
* In theory you can login using the Google authentication option with your @helloworlddevs.com email address.
    * If that doesn't work, Ben's password is shared in LastPass. Search for "DreamHost Admin".
* In the Allowable Hosts field description, copy your IP address. Paste it into a new line.
* Click the "Modify gohelloworlddevs now!" button.

### Connect to Prod MYSQL to test IP whitelisting

Test whether your IP has been whitelisted:

```
mysql -h mysql.go.helloworlddevs.com -u gohelloworlddevs -p
```

When prompted for password, search LastPass for "Hello World WordPress: Database Creds" and copy and paste password.

If you were able to connect, exit without making any changes:

```
exit;
```

## (Step 6) Lando start

Run:

```
lando start
```

The first time you run this it will take a while. Eventually you’ll be given some URLs to access the site, **however they will not work yet because we haven’t pulled the database yet.**

## (Step 7) Pull and import database from production

Run:

```
lando db-pull
```

After the database is downloaded and imported, you'll be asked which domain you'd like to use to access your local site. It's recommended to hit enter to choose "https://helloworld-wp.lando/".

## (Step 8) Pull uploads directory from production

Run:

```
lando files-pull
```

This will download images/files that have been uploaded to production via the WordPress admin GUI.

If asked for a password, search LastPass for "Dreamhost SSH: helloworld_admin" and copy and paste password. In theory this should not happen, but some devs have found it does.

## (Step 9) Test your site

Go to the domain you chose in Step 7. You should see the site. Images should not be missing. Make sure you weren't actually redirected to production by verifying that the URL is not "https://go.helloworlddevs.com/".

## (Step 10) Login to your site

Search LastPass for "Hello World WordPress: WordPress Admin". Copy the username and password.

Go to /manage__hwgo to login.


# Lando basics

See: https://helloworlddevs.atlassian.net/wiki/spaces/HWD/pages/1635418113/Lando+basics

# Lando custom commands

These are custom Lando commands for this project.

## lando db-pull

```
lando db-pull
```
Pulls database from production and replaces your local database.

## lando wordpress-config-local

```
lando wordpress-config-local
```
Replaces instances of "https://go.helloworlddevs.com" within the database with whatever local domain you choose.
Run this if you're being redirected to production.
This is also run at the end of ```lando db-pull```

## lando files-pull

```
lando files-pull
```
Pulls any new files in the production uploads directory to your local uploads directory.

If asked for a password, search LastPass for "Dreamhost SSH: helloworld_admin" and copy and paste password. In theory this should not happen, but some devs have found it does.

# Deployment

## Production

To deploy to production:

* Commit and push to `main` branch: ```git checkout main; git push;```
* ```ssh helloworld_admin@windstone.dreamhost.com``` to SSH into DreamHost. The password is in LastPass. Search for "DreamHost SSH".
* In SSH session: ```cd helloworld-wp```
* In SSH session: ```git pull```
* You should now see your changes reflected on production (https://go.helloworlddevs.com).

@TODO: Write Lando script to deploy. 

## Fixing deployment issues

If experiencing issues deploying, it's possible we need to readd DreamHost to the GitHub Deploy Keys for this repo.

* Run: ```ssh helloworld_admin@windstone.dreamhost.com```
* Run: ```cat ~/.ssh/helloworld_wp_github.pub```
  * You should see a key printed back to you. 
    * If you do, copy the key.
    * If you don't, run: ```ssh-keygen -t rsa -b 4096 -C "YOUR_EMAIL"```
     * When asked to enter the file to save to, enter: /home/helloworld_admin/.ssh/helloworld_wp_github
     * Run: ```cat ~/.ssh/helloworld_wp_github.pub``` and copy the key.
* Run: ```exit```
* Go to: https://github.com/HelloWorldDevs/helloworld-wp/settings/keys
* Click "Add deploy key".
* Title the deploy key something like "DreamHost - helloworld_admin"
* Paste the key.
* Check the "Allow write access" checkbox. This may be useful in case we need to make commits while in SSH due to changes made on production.
* Click "Add key".

For more information see: https://helloworlddevs.atlassian.net/wiki/spaces/HWD/pages/1991606291/Creating+a+new+DreamHost+hosted+site#If-you-already-have-a-Github-repo-and-need-to-%E2%80%9Cpush%E2%80%9D-your-local-site-up-to-DreamHost
