from fabric.api import env, roles, run, cd

# Define sets of servers as roles
env.roledefs = {
    'web': ['ericfrank.com'],
}

# Set the user to use for ssh
env.user = 'defericf'


@roles('web')
def deploy():
    with cd('~/ericfrank.com'):
        run('git checkout master')
        run('git pull -f ericfrank master')
        
