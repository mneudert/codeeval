File.open(ARGV[0]).each_line do |line|
  puts line.strip.to_i.even? ? 1 : 0
end
