for line in io.lines(arg[1]) do
  local times = {}

  for t in line:gmatch('%S+') do
    times[#times + 1] = t
  end

  table.sort(times, function (a, b) return a > b end)

  print(table.concat(times, ' '))
end
