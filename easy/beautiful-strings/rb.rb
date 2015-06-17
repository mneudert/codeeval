File.open(ARGV[0]).each_line do |line|
  chars  = line.strip.downcase.split('')
  counts = Array.new(26, 0)
  beauty = 0

  chars.each do |char|
    next if (97 > char.ord) || (122 < char.ord)

    counts[char.ord - 97] += 1
  end

  counts.sort!.reverse!

  (1..26).reverse_each do |n|
    beauty += n * counts[(n - 26).abs]
  end

  puts beauty
end
