for line in io.lines(arg[1]) do
  local longest = ''

  for word in line:gmatch('(%w+)') do
    if #word > #longest then
      longest = word
    end
  end

  io.write(longest, '\n')
end
