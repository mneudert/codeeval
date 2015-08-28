File.open(ARGV[0]).each_line do |line|
  wines, chars = line.strip.split('|')

  wines = wines.strip.split(' ')
  chars = chars.strip.split('').inject(Hash.new(0)) { |total, e| total[e] += 1; total }

  known = []

  wines.each do | wine |
    isKnown   = true
    wineChars = wine.split('').inject(Hash.new(0)) { |total, e| total[e] += 1; total }

    chars.each do | char, count |
      if !wineChars[char] || wineChars[char] < count
        isKnown = false
      end
    end

    if isKnown
      known << wine
    end
  end

  if 0 == known.length
    puts 'False'
  else
    puts known.join(' ')
  end
end
