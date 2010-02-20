require 'rubygems'
require 'haml'
require 'haml/engine'
require 'fssm'
require 'fssm/backends/polling'

class HamlMonitor
  def initialize
    @haml_src = 'haml'
    @html_target = 'public'
  end

  def haml_to_html_fname(haml_fname)
    File.join(@html_target, haml_fname.sub('.haml', '.html'))
  end

  def run
    haml_mon = self
    FSSM.monitor("/home/bird/cs/uwcycling/nationals/#@haml_src", '**/*.haml') do
      update {|b, r| haml_mon.build(r) }
      delete {|b, r| haml_mon.rm(r) }
      create {|b, r| haml_mon.build(r) }
    end
  end

  def rm(haml_fname)
    html_fname = haml_to_html_fname(haml_fname)
    begin
      FileUtils.rm(html_fname)
      Dir.rmdir(File.dirname(html_fname))
      puts 'rm ' + html_fname
    rescue StandardError
      puts 'error'
    end
  end

  def build(haml_fname)
    return unless File.exists? haml_fname
    html_fname = haml_to_html_fname(haml_fname)
    puts 'build ' + haml_fname + ' -> ' + html_fname
    dirname = File.dirname(html_fname)
    FileUtils.mkdir_p(dirname)
    File.open(html_fname, 'w') do |f|
      f.write(Haml::Engine.new(File.read(File.join(@haml_src, haml_fname))).render)
    end
  end
end

monitor = HamlMonitor.new
monitor.run
