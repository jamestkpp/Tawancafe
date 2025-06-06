const menu = [
  { name: 'Classic Milk Tea', price: '$3.00' },
  { name: 'Thai Milk Tea', price: '$3.50' },
  { name: 'Fruit Tea', price: '$2.80' },
];

export default function MenuPage() {
  return (
    <div>
      <h1 className="text-2xl font-bold mb-4">Menu</h1>
      <ul className="space-y-2">
        {menu.map((item) => (
          <li key={item.name} className="flex justify-between border-b pb-1">
            <span>{item.name}</span>
            <span>{item.price}</span>
          </li>
        ))}
      </ul>
    </div>
  );
}
