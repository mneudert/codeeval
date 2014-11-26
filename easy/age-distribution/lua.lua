for line in io.lines(arg[1]) do
  local age = tonumber(line)

  if age < 0 or age > 100 then
    io.write('This program is for humans\n')
  elseif age <= 2 then
    io.write('Still in Mama\'s arms\n')
  elseif age <= 4 then
    io.write('Preschool Maniac\n')
  elseif age <= 11 then
    io.write('Elementary school\n')
  elseif age <= 14 then
    io.write('Middle school\n')
  elseif age <= 18 then
    io.write('High school\n')
  elseif age <= 22 then
    io.write('College\n')
  elseif age <= 65 then
    io.write('Working for the man\n')
  else
    io.write('The Golden Years\n')
  end
end

-- one empty line at the end required...
io.write('\n\n')
