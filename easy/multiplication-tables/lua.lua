for x = 1, 12 do
  io.write(x)

  for y = 2, 12 do
    io.write(string.format('%4u', x * y))
  end

  io.write('\n')
end
