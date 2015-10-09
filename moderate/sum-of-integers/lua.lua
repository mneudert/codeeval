for line in io.lines(arg[1]) do
  local last   = 0
  local maxval = nil

  for number in line:gmatch('([^,]+)') do
    number = tonumber(number)

    if nil == maxval then
      maxval = number
    end

    if maxval < number then
      maxval = number
    end

    if maxval < number + last then
      maxval = number + last
    end

    if 0 < number + last then
      last = last + number
    else
      last = 0
    end
  end

  io.write(maxval, '\n')
end
