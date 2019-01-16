# The idea
With this project we are trying to teach how to refactor a small piece of code using OOP + Design using SRP and SOLID

# Modern PHP development with OOP

This repo is used as an example playground where we work on a simple problem,
getting the current prince of a given cryptocurrency.

In the first stage we take a very procedural aproach, a single script with
a few instructions to get the job done. Then we will start to iterate over
the code with the intention of making it more easy to adapt for supporting
more cryptocurrencies and more storage engines.

## Navigating the repo

You have to navigate this repo as a timeline for each commit this document will
be updated explainging what we have modified from the previous one with an
explanation of the reasons to do so.

## Running the code

To run this code you will only need `make` and `docker` and `docker-compose`.

At any given commit you can run `make run` to execute the CLI application or
`make test` to execute the test suite.

If you get an error at any point try executing `make install` and then repeat
the original command, it should fix your problems.
