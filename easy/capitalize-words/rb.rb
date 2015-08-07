File.open(ARGV[0]).each_line do |line|
  puts line.strip.split.map{ |word|
    word[0,1].upcase + word[1..-1]
  }.join(' ')
end
