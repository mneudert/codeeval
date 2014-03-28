local sum = 0

for number in io.lines(arg[1]) do
  sum = sum + tonumber(number)
end

io.write(sum, '\n')
