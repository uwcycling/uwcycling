require 'rubygems'
require 'compass' #must be loaded before sinatra
require 'sinatra'
require 'haml'    #must be loaded after sinatra

# set sinatra's variables
#set :app_file, __FILE__
#set :root, File.dirname(__FILE__)

configure do
  Compass.configuration do |config|
    config.project_path = File.dirname(__FILE__)
    config.sass_dir = File.join('views', 'stylesheets')
  end

  set :haml, { :format => :html5 }
end

# at a minimum, the main sass file must reside within the ./views directory.
# here, we create a ./views/stylesheets directory where all of the sass files
# can safely reside.
get '/stylesheets/:name.css' do
  content_type 'text/css', :charset => 'utf-8'
  sass(:"stylesheets/#{params[:name]}", Compass.sass_engine_options )
end

get '/' do
  haml :index
end
