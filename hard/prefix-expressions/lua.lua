require('table');

for line in io.lines(arg[1]) do
  local exprs  = {}
  local values = {}

  for expr in line:gmatch('([^%s]+)') do
    table.insert(exprs, 1, expr)
  end

  for _, expr in ipairs(exprs) do
    if '+' == expr then
      table.insert(values, table.remove(values) + table.remove(values))
    elseif '*' == expr then
      table.insert(values, table.remove(values) * table.remove(values))
    elseif '/' == expr then
      table.insert(values, table.remove(values) / table.remove(values))
    else
      table.insert(values, expr)
    end
  end

  io.write(values[1], '\n')
end
