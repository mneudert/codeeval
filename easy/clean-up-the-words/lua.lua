for line in io.lines(arg[1]) do
  io.write(
    line:lower():gsub('[^%a]+', ' '):gsub('  ', ' '):match('^%s*(.-)%s*$'),
    '\n'
  )
end
