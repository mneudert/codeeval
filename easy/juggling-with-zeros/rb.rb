File.open(ARGV[0]).each_line do |line|
  seqs = line.strip.split(' ')
  bin  = ''

  while 0 < seqs.length do
    flag = seqs.shift
    seq  = seqs.shift

    if '0' == flag
      bin << seq
    else
      bin << ('1' * seq.length)
    end
  end

  puts bin.to_i(2)
end
