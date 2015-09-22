File.open(ARGV[0]).each_line do |line|
  puts line.strip.split(' ').sort!.reverse!.join(' ')
end
