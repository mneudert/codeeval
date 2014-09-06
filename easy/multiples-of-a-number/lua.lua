for line in io.lines(arg[1]) do
  local base, comp = line:match('(%d+),(%d+)')

  base = tonumber(base)
  comp = tonumber(comp)

  local mult = comp

  while base > comp do
    comp = comp + mult
  end

  io.write(comp, '\n')
end
