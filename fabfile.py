from fabric.api import *


env.hosts = ['snail@139.162.130.172']

#must commit first and be on clean state

def deploy():
    local('git push origin')
    with cd('/var/www/218'):
        #make sure a clean state
        run('git checkout -f')     
        run('git pull')
        #run ('drush sql-cli < db.sql')
        run('sudo drush cc all')
        #run('sudo service nginx restart') 

def push():
    local('rsync -avz -O --ignore-existing --size-only --progress sites/default/files/ snail@139.162.130.172:/var/www/218/sites/default/files/')

def dbexport():
    local('drush sql-dump --result-file=db')
