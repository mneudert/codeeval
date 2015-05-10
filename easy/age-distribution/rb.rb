File.open(ARGV[0]).each_line do |line|
  age = line.strip.to_i

  if age < 0 || age > 100 then
    puts "This program is for humans"
    continue
  end

  if age <= 2 then
    puts "Still in Mama's arms"
  elsif age <= 4 then
    puts "Preschool Maniac"
  elsif age <= 11 then
    puts "Elementary school"
  elsif age <= 14 then
    puts "Middle school"
  elsif age <= 18 then
    puts "High school"
  elsif age <= 22 then
    puts "College"
  elsif age <= 65 then
    puts "Working for the man"
  else
    puts "The Golden Years"
  end
end
