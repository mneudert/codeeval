for line in io.lines(arg[1]) do
  local found       = false
  local left, right = line:match("([^,]+),([^,]+)")

  for i = 0, left:len() do
    if left == right then
      found = true
      break
    end

    right = right:sub(2) .. right:sub(1, 1)
  end

  if found then
    io.write('True\n')
  else
    io.write('False\n')
  end
end
