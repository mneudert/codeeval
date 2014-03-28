for line in io.lines(arg[1]) do
  local sentence, char = line:match('(.+),(.+)')
  local char_pos       = sentence:reverse():find(char)

  if nil == char_pos then
    io.write('-1\n')
  else
    io.write((sentence:len() - char_pos), '\n')
  end
end
