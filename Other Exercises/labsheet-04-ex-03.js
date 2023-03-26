let num = 1;

for (let i = 1; i <= 4; i++) {
  let line = "";
  for (let j = 1; j <= i; j++) {
    line += num + "\t";
    num++;
  }
  console.log(line);
}