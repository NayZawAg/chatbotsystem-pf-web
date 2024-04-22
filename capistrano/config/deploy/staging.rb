# frozen_string_literal: true

set :branch, ENV.fetch('BRANCH', 'develop')

server ENV.fetch('SERVER', 'stg-web-omotenashi'),
  user: 'opc',
  roles: %i[app web],
  ssh_options: {
    forward_agent: true,
    auth_methods: %w[publickey],
  }
