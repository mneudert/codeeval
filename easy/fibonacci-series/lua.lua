local fibs = { 0, 1 }

for line in io.lines(arg[1]) do
  local fib = tonumber(line)

  if not fibs[fib + 1] then
    for f = #fibs, fib do
      fibs[f + 1] = fibs[f] + fibs[f - 1]
    end
  end

  print(fibs[fib + 1])
end
