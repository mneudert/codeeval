for line in io.lines(arg[1]) do
  for char in line:gmatch('.') do
    if nil ~= char:match('^%l+$') then
      io.write(char:upper())
    else
      io.write(char:lower())
    end
  end

  io.write('\n')
end
