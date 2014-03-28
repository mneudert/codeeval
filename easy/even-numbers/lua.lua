for line in io.lines(arg[1]) do
  io.write((tonumber(line:sub(-1)) + 1) % 2, '\n')
end
