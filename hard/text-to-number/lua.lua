local numbers = {
  zero = 0, one = 1, two   = 2, three = 3, four  = 4,
  five = 5, six = 6, seven = 7, eight = 8, nine  = 9,

  ten     = 10, eleven  = 11, twelve    = 12, thirteen = 13, fourteen = 14,
  fifteen = 15, sixteen = 16, seventeen = 17, eighteen = 18, nineteen = 19,
}

local partials = {
  twenty = 20, thirty  = 30, forty  = 40, fifty  = 50,
  sixty  = 60, seventy = 70, eighty = 80, ninety = 90
}

for line in io.lines(arg[1]) do
  local negmod    = 1
  local number    = 0
  local millions  = 0
  local thousands = 0
  local hundreds  = 0
  local rest      = 0

  for word in line:gmatch('(%w+)') do
    if 'negative' == word then
      negmod = -1
    end

    if numbers[word] then
      rest = rest + numbers[word]
    end

    if partials[word] then
      rest = rest + partials[word]
    end

    if 'hundred' == word then
      hundreds = rest * 100
      rest     = 0
    end

    if 'thousand' == word then
      thousands = (hundreds + rest) * 1000
      hundreds  = 0
      rest      = 0
    end

    if 'million' == word then
      millions  = (thousands + hundreds + rest) * 1000000
      thousands = 0
      hundreds  = 0
      rest      = 0
    end
  end

  io.write(negmod * (millions + thousands + hundreds + rest), '\n')
end
