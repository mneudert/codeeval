for line in io.lines(arg[1]) do
  local words = {}
  local index = 0

  for word in line:gmatch('(%w+)') do
    index        = index + 1
    words[index] = word
  end

  io.write(words[#words - 1], '\n')
end
