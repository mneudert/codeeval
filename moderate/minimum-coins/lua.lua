for line in io.lines(arg[1]) do
  local amount = tonumber(line)
  local coins  = 0

  for i, coin in ipairs({ 5, 3, 1 }) do
    while coin <= amount do
      coins  = coins + 1
      amount = amount - coin
    end
  end

  io.write(coins, '\n')
end
