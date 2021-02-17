context('index', () => {
  beforeEach(() => {
    cy.visit('http://stolyaroff.test')
  })

  describe('contains app global name', () => {
    it('contains app global name', () => {
			cy.contains('Столярофф');
		})
	})

  describe('app name is bold', () => {
    it('app name is bold', () => {
			cy.get('[data-cy=app-name]')
				.should('have.class', 'font-bold');
		})
	})
})
