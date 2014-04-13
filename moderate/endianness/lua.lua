if 1 == string.byte(string.dump(function() end), 7) then
  io.write('LittleEndian\n')
else
  io.write('BigEndian\n')
end
