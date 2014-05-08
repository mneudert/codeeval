using System;
using System.IO;
using System.Linq;

class Program
{
    static void Main(string[] args)
    {
        using (StreamReader reader = File.OpenText(args[0]))

        while (!reader.EndOfStream)
        {
            string line = reader.ReadLine();

            if (null == line)
            {
                continue;
            }

            int[] numbers = line.Split(' ').Select( d => Int32.Parse(d.ToString()) ).ToArray();
            int   fizz = numbers[0], buzz = numbers[1], max = numbers[2];

            for (int i = 1; i <= max; i++)
            {
                if (i % fizz == 0 && i % buzz == 0)
                    Console.Write("FB");
                else if (i % buzz == 0)
                    Console.Write("B");
                else if (i % fizz == 0)
                    Console.Write("F");
                else
                    Console.Write(i);

                if (i < max)
                    Console.Write(' ');
            }

            Console.WriteLine();
        }
    }
}
