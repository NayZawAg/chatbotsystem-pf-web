# frozen_string_literal: true

set :branch, ENV.fetch('BRANCH', 'master')

server ENV.fetch('SERVER', 'web-omotenashi'),
  user: 'opc',
  roles: %i[app web],
  ssh_options: {
    forward_agent: true,
    auth_methods: %w[publickey],
  }
