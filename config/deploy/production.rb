server '107.170.55.110', user: "deploy", roles: %w{app}

set :branch, "master"
set :deploy_to, "/var/www/donstaxidermycanton.com/html"

set :ssh_options, {
  forward_agent: true,
}

namespace :deploy do
   task :permissions do
     on roles :all do
     execute "chmod -R 777 #{release_path}"
     end
   end
   after :updated, :permissions
end
