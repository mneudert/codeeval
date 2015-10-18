for line in io.lines(arg[1]) do
  local number   = tonumber(line)
  local digitSum = 0

  for n in line:gmatch('.') do
    digitSum = digitSum + math.pow(tonumber(n), line:len())
  end

  print((number == digitSum) and 'True' or 'False')
end
