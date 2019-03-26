package deco;

public class Granulado extends SorveteDecorator{
	public Granulado(ISorvete objetoDecorado) {
		super(objetoDecorado);
	}

	@Override
	public float preco() {
		return this.objetoDecorado.preco() + 2.5f;
	}
}
