function string:capitalize()
  return self:gsub('^%l', string.upper)
end

for line in io.lines(arg[1]) do
  io.write(line:gsub('(%w+)', string.capitalize) .. '\n')
end
