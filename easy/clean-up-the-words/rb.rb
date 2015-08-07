File.open(ARGV[0]).each_line do |line|
  puts line.strip.downcase.gsub(/[^a-z]+/, ' ').gsub('  ', ' ').strip
end
