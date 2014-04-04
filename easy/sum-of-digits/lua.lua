for number in io.lines(arg[1]) do
  local sum = 0

  for digit in number:gmatch('.') do
    sum = sum + tonumber(digit)
  end

  io.write(sum, '\n')
end
