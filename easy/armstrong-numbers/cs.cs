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
            string number = reader.ReadLine();

            if (null == number)
            {
                continue;
            }

            int   sum    = 0;
            int[] digits = number.Select( d => Int32.Parse(d.ToString()) ).ToArray();

            foreach (int digit in digits)
            {
                sum += (int) Math.Pow(digit, number.Length);
            }

            Console.WriteLine( (sum.ToString() == number) ? "True" : "False" );
        }
    }
}
