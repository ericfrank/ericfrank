from fabric.api import env, roles, run, cd

# Define sets of servers as roles
env.roledefs = {
    'web': ['pistoncloud.com'],
}

# Set the user to use for ssh
env.user = 'pistoncloud.com'


@roles('web')
def deploy():
    with cd('~/domains/pistoncloud.com/html'):
        run('git checkout master')
        run('git pull piston master')
        #run('grunt')
        run('cp htaccess.txt .htaccess')
        
@roles('web')
def deploy_dev():
   with cd('~/domains/dev.pistoncloud.com/html'):
       run('git checkout dev')
       run('git pull piston dev')
       #run('grunt')
       run('cp htaccess.txt .htaccess')

