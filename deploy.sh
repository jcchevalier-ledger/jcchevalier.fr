#!/bin/bash
# Check presence of .env file
if [[ ! -f .env.prod ]]; then
  echo "No .env.prod file found"
  exit 1
fi

host=jisse@jcchevalier.fr

#Copy over SHH the .env file, and create file tree if it does not exist
ssh $host 'mkdir -p /var/www/jcchevalier.fr/shared/'
scp .env.prod $host:/var/www/jcchevalier.fr/shared/.env

# Deploy project thanks to deployer
php vendor/bin/dep deploy

# Install all Node dependencies and run prod environment
php vendor/bin/dep npm:install
php vendor/bin/dep npm:run

# Remove unnecessary files
echo "Deletion in progress ..."
RELEASE_PATH=$(ssh $host 'readlink -f /var/www/jcchevalier.fr/current')

echo "deploy.sh"
ssh $host 'rm '${RELEASE_PATH}'/deploy.sh'

echo "tests file"
ssh $host 'rm -rf '${RELEASE_PATH}'/tests'

echo "server.php"
ssh $host 'rm '${RELEASE_PATH}'/server.php'

echo "deploy.php"
ssh $host 'rm '${RELEASE_PATH}'/deploy.php'

echo "README.md"
ssh $host 'rm '${RELEASE_PATH}'/README.md'

echo "Done !"
exit 0
