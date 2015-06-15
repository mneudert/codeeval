File.open(ARGV[0]).each_line do |line|
  line.strip!

  if 55 >= line.length
    puts line
    next
  end

  snip = line[0,40]

  if snip.index(' ')
    snip = snip[0..snip.rindex(' ')].strip
  end

  puts snip + '... <Read More>'
end
