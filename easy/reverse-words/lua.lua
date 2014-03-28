for line in io.lines(arg[1]) do
  local words = {}
  local index = 0

  for word in line:gmatch('(%w+)') do
    index        = index + 1
    words[index] = word
  end

  if index > 1 then
    for i = index, 2, -1 do
      io.write(words[i], ' ')
    end
  end

  io.write(words[1], '\n')
end
