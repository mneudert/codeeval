File.open(ARGV[0]).each_line do |line|
  depth    = line.strip.to_i
  triangle = [ 1 ]

  (1..depth - 1).each do |i|
    current = 1

    triangle << current

    (1..i).each do |j|
      current = (current * (i + 1- j)) / j

      triangle << current
    end
  end

  puts triangle.join(' ')
end
