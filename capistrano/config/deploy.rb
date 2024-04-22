# config valid for current version and patch releases of Capistrano
lock "~> 3.11.0"

set :application, 'omotenashi'
set :repo_url, 'git@github.com:curations/omotenashi-pf-web.git'
set :deploy_to, '/usr/local/omotenashi'
