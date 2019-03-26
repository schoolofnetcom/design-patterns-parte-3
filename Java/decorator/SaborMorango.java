package deco;

public class SaborMorango extends SorveteDecorator{

	public SaborMorango(ISorvete objetoDecorado) {
		super(objetoDecorado);
	}

	@Override
	public float preco() {
		return this.objetoDecorado.preco() + 2f;
	}

}
