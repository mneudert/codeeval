for line in io.lines(arg[1]) do
  local words = {}
  local index = 0

  for word in line:gmatch('(%w+)') do
    index        = index + 1
    words[index] = word:sub(-1, -1) .. word:sub(2, -2) .. word:sub(1, 1)
  end

  io.write(table.concat(words, ' '), '\n')
end
