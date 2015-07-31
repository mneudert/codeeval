File.open(ARGV[0]).each_line do |line|
  number = line.strip
  digits = number.split('')
  count  = digits.count
  sum    = 0

  digits.each do |digit|
    sum += digit.to_i ** count
  end

  if number.to_i == sum
    puts 'True'
  else
    puts 'False'
  end
end
