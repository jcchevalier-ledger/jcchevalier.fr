#!/bin/bash
# Check presence of .env file
if [[ ! -f .env ]]
then
    echo "No .env file found"
    exit 1
fi

scp .env jisse@jcchevalier.fr:/var/www/jcchevalier.fr/shared/
exit 0
